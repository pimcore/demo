// autoComplete.js on type event emitter
document.querySelector("#autoComplete").addEventListener("autoComplete", function(event) {
    console.log(event.detail);
});
// The autoComplete.js Engine instance creator
const autoCompletejs = new autoComplete({
    data: {                              // Data src [Array, Function, Async] | (REQUIRED)
        src: async () => {
            // API key token
            const token = "this_is_the_API_token_number";
            // User search query
            const query = document.querySelector("#autoComplete").value;
            // Fetch External Data Source
            const source = await fetch(`/en/search?key=${token}&q=${query}`);
            // Format data into JSON
            const data = await source.json();
            // Return Fetched data
            return data;
        },
        key: ["food","cities","animals"],
        cache: false
    },
    sort: (a, b) => {                    // Sort rendered results ascendingly | (Optional)
        if (a.match < b.match) return -1;
        if (a.match > b.match) return 1;
        return 0;
    },
    query: {                               // Query Interceptor               | (Optional)
        manipulate: (query) => {
            return query.replace("pizza", "burger");
        }
    },
    selector: "#autoComplete",           // Input field selector              | (Optional)
    threshold: 2,                        // Min. Chars length to start Engine | (Optional)
    debounce: 300,                       // Post duration for engine to start | (Optional)
    searchEngine: "loose",              // Search Engine type/mode           | (Optional)
    highlight: false,
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
        const selection = feedback.selection.value.food;
        // Render selected choice to selection div
        document.querySelector(".selection").innerHTML = selection;
        // Clear Input
        document.querySelector("#autoComplete").value = "";
        // Change placeholder with the selected value
        document.querySelector("#autoComplete").setAttribute("placeholder", selection);
        // Concole log autoComplete data feedback
        console.log(feedback);
    },// Highlight matching results      | (Optional)
});

// On page load add class to input field
window.addEventListener("load", function() {
    document.querySelector("#autoComplete").classList.add("out");
    // document.querySelector("#autoComplete_results_list").style.display = "none";
});