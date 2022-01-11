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
        span.innerHTML = "Age of Empire IV";
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
        let aSite = document.createElement("a");
        let aForum = document.createElement("a");

        spanForum.innerHTML = "Forum";
        spanSite.innerHTML = "Site";
        aSite.href = "./index.php";
        aForum.href = "./index.php";

        aForum.appendChild(spanForum);
        aSite.appendChild(spanSite);
        divSite.appendChild(aSite);
        divForum.appendChild(aForum);
        this.divMiddle.appendChild(divSite);
        this.divMiddle.appendChild(divForum);
    }

    /**
     * Add content into right div
     */
    contentRight() {
        let span = document.createElement("span");
        let a = document.createElement('a');
        a.href = "./index.php";

        span.innerHTML = "Connexion";
        a.appendChild(span);
        this.divRight.appendChild(a);
    }
}

export {Menu};