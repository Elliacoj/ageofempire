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
            this.divContainer.animate([
                {
                    width: "15%"
                }
            ], {
                fill: "forwards",
                duration: 300
            });
        });
        this.divContainer.addEventListener("mouseout", () => {

            this.divContainer.animate([
                {
                    width: "2%"
                }
            ], {
                fill: "forwards",
                duration: 300
            });

            setTimeout(() => {
                this.divContainer.style.opacity = "0.45";
            }, 300)
        });
    }
}
export {LeftMenu};