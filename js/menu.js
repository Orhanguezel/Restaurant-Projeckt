$(document).ready(function() {
    $.ajax({
        url: 'php/get_menu.php',
        method: 'GET',
        dataType: 'json',
        success: function(data) {
            var menuContainer = $('#menu-container');
            data.forEach(function(category) {
                var categoryHeader = $('<h3>').addClass('col-12').text(category.name);
                menuContainer.append(categoryHeader);

                category.subcategories.forEach(function(subcategory) {
                    var subcategoryHeader = $('<h4>').addClass('col-12').text(subcategory.name);
                    menuContainer.append(subcategoryHeader);

                    subcategory.items.forEach(function(item) {
                        var itemCard = $('<div>').addClass('col-md-4 mb-4');
                        var card = $('<div>').addClass('card');
                        var cardBody = $('<div>').addClass('card-body');
                        var cardTitle = $('<h5>').addClass('card-title').text(item.name);
                        var cardText = $('<p>').addClass('card-text').text(item.prices.default + ' EUR');
                        cardBody.append(cardTitle, cardText);
                        card.append(cardBody);
                        itemCard.append(card);
                        menuContainer.append(itemCard);
                    });
                });
            });
        },
        error: function(error) {
            console.error('Error fetching menu data:', error);
        }
    });
});
