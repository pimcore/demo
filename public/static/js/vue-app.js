const apolloClient = new Apollo.lib.ApolloClient({
  networkInterface: Apollo.lib.createNetworkInterface({
    uri: '/pimcore-graphql-webservices/events?apikey=8e0935fe948ccf727342e86015c00834',
    transportBatching: true,
  }),
  connectToDevTools: true,
});

const apolloProvider = new VueApollo.ApolloProvider({
  defaultClient: apolloClient,
});

const GET_EVENTS = Apollo.gql `
query getEventListing($queryFilter: String) {
  events: getEventListing(sortBy: "fromDate",sortOrder: "ASC", filter: $queryFilter) {
    list: edges {
      details: node {
        id
        title
        locationAddress
        fromDate
        toDate
        fromTime
        toTime
        mainImage {
          fullpath(thumbnail: "events_list")
        }
        tags
      }
    }
  }
}
`;

const GET_EVENT_DETAILS = Apollo.gql `
query getEventDetails($id: Int!) {
  eventDetails: getEvent(id: $id) {
    id
    title
    description
    locationAddress
    locationMap {
      longitude
      latitude
    }
    fromDate
    toDate
    fromTime
    toTime
    mainImage {
      fullpath(thumbnail: "events_header")
    }
    video {
      type
      data {
        ... on VideoDataDescriptor {
          id
        }
      }
    }
    contactName
    contactPhone
    contactEmail
    contactAddress
    cars {
      ... on object_Car {
        manufacturer {
          ... on object_Manufacturer {
            name
          }
        }
        carName: name
        productionYear
      }
    }
  }
}
`;

// Map components
Vue.component('v-map', window.Vue2Leaflet.LMap);
Vue.component('v-tilelayer', window.Vue2Leaflet.LTileLayer);
Vue.component('v-marker', window.Vue2Leaflet.LMarker);

new Vue({
  el: '#vueapp',
  delimiters: ['[[',']]'],
  data() {
    return {
      eventList: null,
      eventDetails: null,
      loading: false,
      errored: false,
      activePanel: 1,
      filters: {
        fromDate: null,
        toDate: null,
        tag: 'All'
      },
      headers: {
        'X-Requested-With': 'XMLHttpRequest',
      }
    }
  },
  components: {
    vuejsDatepicker
  },
  apolloProvider,
  apollo: {
    eventList: {
      query: GET_EVENTS,
      update: eventList => eventList.events.list,
      error(error) { // Catch the error
        console.log(error);
        this.errored = true;
      }
    }
  },
  methods: {
    filterListing: function() {
      filters = new Object();

      if (this.filters.fromDate) {
        var fromTimeStamp = +new Date(this.filters.fromDate.setHours(0, 0, 0, 0) / 1000);
        filters.fromDate = {
          $gte: fromTimeStamp
        };
      }
      if (this.filters.toDate) {
        var toTimeStamp = +new Date(this.filters.toDate.setHours(23, 59, 59, 999) / 1000);
        filters.toDate = {
          $lte: toTimeStamp
        };
      }
      if(!$.isEmptyObject(filters)) {
        filters = JSON.stringify(filters);
      } else filters = null

      this.$apollo.queries.eventList.refetch({
        queryFilter: filters
      });
    },
    clearFilters: function() {
      this.filters.fromDate = null;
      this.filters.toDate =null;
      this.filters.tag = 'All';
      this.filterListing();
    },
    openDetailPanel: function(id) {
      this.$apollo.query({
        query: GET_EVENT_DETAILS,
        variables: {
          id: parseInt(id),
        },
      }).then(data => {
        this.eventDetails = data.data.eventDetails;
        this.activePanel = 2;
        this.scrollToTop();
      });

    },
    changePanel(panelId) {
      this.activePanel = panelId;
      this.scrollToTop();
    },
    scrollToTop: function() {
      window.scrollTo(0, 0);
    },
    compareDates(fromDate, toDate) {
      return new Date(toDate).setHours(0, 0, 0, 0) > new Date(fromDate).setHours(0, 0, 0, 0);
    }
  },
  computed: {
    filterResult: function() {
      var vm = this;
      var tag = vm.filters.tag;

      if (tag === "All") {
        return vm.eventList;
      } else {
        return vm.eventList.filter(function(event) {
          return event.details.tags.indexOf(tag) >= 0;

        });
      }
    },
    mapCoordinates: function() {
      return [this.eventDetails.locationMap.latitude, this.eventDetails.locationMap.longitude]
    }
  }
});
