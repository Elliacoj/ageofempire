export {ContentLeftMenu};
class ContentLeftMenu {
    /**
     * Constructor
     */
    constructor() {
        this.title = document.createElement("h2");
        this.divContainer = document.createElement("div");
    }

    /**
     * Init the content of left div
     * @param container
     */
    init(container) {
        this.title.innerHTML = "Civilisations";
        container.appendChild(this.title);
        container.appendChild(this.divContainer);
        this.searchContent();
    }

    searchContent() {
        let xml = new XMLHttpRequest();
        xml.responseType = "json";
        xml.open("GET", "./api/index.php");
        xml.send();
        xml.onload = () => {
            if (xml.response.length !== 0) {
                let response = xml.response;
                for(let civilization of response) {
                    this.createContent(civilization.name);
                }
            }
        }
    }

    createContent(name) {
        let div = document.createElement("div");
        let title = document.createElement("h3");
        let span = document.createElement("span");
        title.innerHTML = name;

        this.divContainer.appendChild(div);
        div.appendChild(title);
        title.appendChild(span);
    }
}