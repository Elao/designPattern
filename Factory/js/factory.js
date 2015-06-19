function BeverageFactory() {
    this.getBeverage = function (type) {
        switch(type) {
            case 'beer':
                return new Beer();
                break;
            case 'wine':
                return new Wine();
                break;
            default:
                console.error('Beverage type "' + type + '" not valid');
        }
    }
}

function Wine() {
    this.getAlcohol = function () {
        return 12;
    }
}

function Beer() {
    this.getAlcohol = function () {
        return 5;
    }
}

var beverageFactory = new BeverageFactory();

var beer = beverageFactory.getBeverage('beer');
console.log('The alcohol of beer is ' + beer.getAlcohol() + ' degrees.');

var wine = beverageFactory.getBeverage('wine');
console.log('The alcohol of wine is ' + wine.getAlcohol() + ' degrees.');

// Generate an Error
var pastis = beverageFactory.getBeverage('pastis');
