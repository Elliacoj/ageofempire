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

    /**
     * Api for search civilization and
     */
    searchContent() {
        let xml = new XMLHttpRequest();
        xml.responseType = "json";
        xml.open("GET", "./api/index.php");
        xml.send();
        xml.onload = () => {
            if (xml.response.length !== 0) {
                let response = xml.response;
                for(let civilization of response[0]['civilization']) {
                    this.createContentCiv(civilization.name, response[1]['categories'], civilization.id);
                }
            }
        }
    }

    /**
     * Create content for civilization
     * @param name
     * @param categories
     * @param id
     */
    createContentCiv(name, categories, id) {
        let div = document.createElement("div");
        let title = document.createElement("h3");
        let span = document.createElement("span");
        title.innerHTML = name;

        this.divContainer.appendChild(div);
        div.appendChild(title);
        title.appendChild(span);

        for (let category of categories) {
            this.createContentCat(category.name, div, id);
        }

        this.animationCiv(title, span);
    }

    /**
     * Create content for categories of civilization
     * @param name
     * @param container
     * @param id
     */
    createContentCat(name, container, id) {
        let div = document.createElement("div");
        let a = document.createElement("a");
        switch (name) {
            case "Informations générales":
                a.href = "./index.php?controller=information&id=" + id;
                break;
            case "Builds orders (BO)":
                a.href = "./index.php?controller=buildOrders&id=" + id;
                break;
        }

        a.innerHTML = name;

        container.appendChild(div);
        div.appendChild(a);
    }

    /**
     * animation for button civ
     * @param button
     * @param arrow
     */
    animationCiv(button, arrow) {
        button.addEventListener("click", () => {
            let allDiv = button.parentElement.querySelectorAll("div");

            if(!button.classList.contains("open")) {
                arrow.style.transform = "rotate(135deg)"
                for(let div of allDiv) {
                    div.style.display = "block";
                    button.classList.add("open");
                }
            }
            else {
                arrow.style.transform = "rotate(45deg)"
                for(let div of allDiv) {
                    div.style.display = "none";
                    button.classList.remove("open");
                }
            }
        });
    }
}