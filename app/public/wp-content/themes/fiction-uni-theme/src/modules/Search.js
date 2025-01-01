import $ from "jquery";

class Search {

    //constructor
    constructor() {
        this.resultsDIv = $("#search-overlay__results");
        this.openButton = $(".js-search-trigger");
        this.closeButton = $(".search-overlay__close");
        this.searchOverlay = $(".search-overlay");
        this.isOverlayOpen = false;
        this.searchfield = $("#search-term");
        this.timer;
        this.spinnerDisplay = false;
        this.searchValue = "";

        this.events();
    }

    //events
    events() {
        this.openButton.on("click", this.openOverlay.bind(this));
        this.closeButton.on("click", this.closeOverlay.bind(this));

        $(document).on("keyup", this.keyPressDispatcher.bind(this));
        this.searchfield.on("keyup", this.searchType.bind(this));
    }

    //methods
    keyPressDispatcher(event) {
        if (event.keyCode == 83 && !this.isOverlayOpen && $("input, textarea").is(": focus"))
            this.openOverlay();
        if (event.keyCode == 27 && this.isOverlayOpen)
            this.closeOverlay();
    }

    searchType(event) {

        if (this.searchValue != this.searchfield.val()) {
            clearTimeout(this.timer);
            if (this.searchfield.val() != "") {
                if (!this.spinnerDisplay) {
                    this.resultsDIv.html('<div class="spinner-loader"></div>');
                    this.spinnerDisplay = true;
                }
                this.timer = setTimeout(this.getResults.bind(this), 2000);
            } else {
                this.resultsDIv.html("");
                this.spinnerDisplay = false;
            }

            this.searchValue = this.searchfield.val();
        }
    }

    getResults() {
        this.resultsDIv.html("results");
        this.spinnerDisplay = false;
    }

    openOverlay() {
        this.searchOverlay.addClass("search-overlay--active");
        $("body").addClass("body-no-scroll");
        this.isOverlayOpen = true;
    }

    closeOverlay() {
        this.searchOverlay.removeClass("search-overlay--active");
        $("body").removeClass("body-no-scroll");
        this.isOverlayOpen = false
    }


}

export default Search;