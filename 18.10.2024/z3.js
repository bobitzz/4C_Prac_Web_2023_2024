const obiekt = {
    name: "Aleksander",
    showName: function() {
        console.log(this.name);
    },

    showNameArrow: () => {
        console.log(this.name);
    }
}

obiekt.showName();
obiekt.showNameArrow();