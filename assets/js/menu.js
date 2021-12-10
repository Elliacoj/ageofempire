class Menu {
    /**
     * Constructor
     */
    constructor() {
        this.divContainer = document.getElementById("menu");
        this.divRight = document.createElement("div");
        this.divLeft = document.createElement("div");
        this.divMiddle = document.createElement("div");
    }

    /**
     * Init the menu into page menu
     */
    init() {
        this.contentLeft();
        this.contentMiddle();
        this.contentRight();

        this.divContainer.appendChild(this.divLeft);
        this.divContainer.appendChild(this.divMiddle);
        this.divContainer.appendChild(this.divRight);
    }

    /**
     * Add content into left div
     */
    contentLeft() {
        let span = document.createElement("span");
        span.innerHTML = "Age of empire 4";
        this.divLeft.appendChild(span);
    }

    /**
     * Add content into middle div
     */
    contentMiddle() {
        let divForum = document.createElement("div");
        let divSite = document.createElement("div");
        let spanForum = document.createElement("span");
        let spanSite = document.createElement("span");

        spanForum.innerHTML = "Forum";
        spanSite.innerHTML = "Site";

        divSite.appendChild(spanSite)
        divForum.appendChild(spanForum);
        this.divMiddle.appendChild(divSite);
        this.divMiddle.appendChild(divForum);
    }

    /**
     * Add content into right div
     */
    contentRight() {
        let span = document.createElement("span");
        span.innerHTML = "Connexion";
        this.divRight.appendChild(span);
    }
}

export {Menu};