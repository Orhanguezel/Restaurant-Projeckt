$(document).ready(function() {
    $.ajax({
        url: 'php/orders.php',
        method: 'GET',
        success: function(data) {
            var orders = JSON.parse(data);
            var ordersHtml = '<table class="table"><thead><tr><th>ID</th><th>Customer Name</th><th>Order Details</th><th>Order Time</th></tr></thead><tbody>';
            orders.forEach(function(order) {
                ordersHtml += '<tr><td>' + order.id + '</td><td>' + order.customer_name + '</td><td>' + order.order_details + '</td><td>' + order.order_time + '</td></tr>';
            });
            ordersHtml += '</tbody></table>';
            $('#orders').html(ordersHtml);
        },
        error: function(error) {
            console.error('Error fetching orders:', error);
        }
    });
});
