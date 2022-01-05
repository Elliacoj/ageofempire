import {ContentLeftMenu} from "./contentLeftMenu";

class LeftMenu {
    /**
     * Constructor
     */
    constructor() {
        this.divContainer = document.getElementById("leftMenu");
        this.divRight = document.createElement("div");
        this.divLeft = document.createElement("div");
        this.content = new ContentLeftMenu();
    }

    /**
     * init the left div
     */
    init() {
        this.contentRight();
        this.contentLeft();
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
     * Add content into div left
     */
    contentLeft() {
        this.content.init(this.divLeft);
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
        this.divContainer.addEventListener("mouseleave", () => {
            this.animeConfig(this.divContainer, "2%", true);
            this.animeConfig(this.divRight, "100%");
            this.animeConfig(this.divLeft, "0");
        });
    }

    animeConfig(element, width, time = false) {
        element.animate([
            {
                width: width
            }
        ], {
            fill: "forwards",
            duration: 300
        });

        if(time) {
            setTimeout(() => {
                this.divContainer.style.opacity = "0.45";
            }, 300)
        }
    }
}
export {LeftMenu};