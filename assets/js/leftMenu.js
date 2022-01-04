class LeftMenu {
    /**
     * Constructor
     */
    constructor() {
        this.divContainer = document.getElementById("leftMenu");
        this.divRight = document.createElement("div");
        this.divLeft = document.createElement("div");
    }

    /**
     * init the left div
     */
    init() {
        this.contentRight();
        this.divContainer.appendChild(this.divLeft);
        this.divContainer.appendChild(this.divRight);
        this.anime();
    }

    /**
     * Add content into div right
     */
    contentRight() {
        let div = document.createElement("div");

        this.divRight.appendChild(div);
    }

    /**
     * anime the width change
     */
    anime() {
        this.divContainer.addEventListener("mouseover", () => {
            this.divContainer.style.opacity = "0.9";
            this.divLeft.style.width = "0";

            this.animeConfig(this.divContainer, "15%");
            this.animeConfig(this.divRight, "15%");
            this.animeConfig(this.divLeft, "85%");
        });
        this.divContainer.addEventListener("mouseout", () => {
            this.animeConfig(this.divContainer, "2%");
            this.animeConfig(this.divRight, "100%");
            this.animeConfig(this.divLeft, "0");

            setTimeout(() => {
                this.divContainer.style.opacity = "0.45";
            }, 300)
        });
    }

    animeConfig(element, width) {
        element.animate([
            {
                width: width
            }
        ], {
            fill: "forwards",
            duration: 300
        });
    }
}
export {LeftMenu};