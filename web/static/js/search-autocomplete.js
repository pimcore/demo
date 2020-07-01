// autoComplete.js on type event emitter
document.querySelector("#autoComplete").addEventListener("autoComplete", function(event) {
    console.log(event.detail);
});
// The autoComplete.js Engine instance creator
const autoCompletejs = new autoComplete({
    data: {
        src: async () => {
            // User search query
            const query = document.querySelector("#autoComplete").value;

            if(query) {
                // Fetch External Data Source
                const source = await fetch(`/en/search?autocomplete=true&term=${query}`);
                // Format data into JSON
                const data = await source.json();
                // Return Fetched data
                return data;
            } else {
                return [];
            }
        },
        key: ["product"],
        cache: false
    },
    sort: (a, b) => {
        if (a.match < b.match) return -1;
        if (a.match > b.match) return 1;
        return 0;
    },
    // query: {
    //     manipulate: (query) => {
    //         return query.replace("maroon", "red");
    //     }
    // },
    selector: "#autoComplete",
    threshold: 2,
    debounce: 300,
    searchEngine: "loose",
    highlight: false,
    maxResults: 7,
    resultsList: {
        render: true,
        container: function(source) {
            source.setAttribute("id", "autoComplete_results_list");
            source.setAttribute("class", "d-none");
        },
        destination: document.querySelector("#autoComplete"),
        position: "afterend",
        element: "ul",
    },
    resultItem: {
        content: function(data, source) {
            source.innerHTML = data.match;
        },
        element: "li",
    },
    noResults: function() {
        const result = document.createElement("li");
        result.setAttribute("class", "no_result autoComplete_result");
        result.setAttribute("tabindex", "1");
        result.innerHTML = "No Results";
        document.querySelector("#autoComplete_results_list").appendChild(result);
    },
    onSelection: function(feedback) {
        const selection = feedback.selection.value.href;
        location.replace(selection);
    },
});

// On page load add class to input field
window.addEventListener("load", function() {
    document.querySelector("#autoComplete").classList.add("out");
});