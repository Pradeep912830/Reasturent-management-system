function orderDish(dishName) {
    alert("You have ordered: " + dishName);
    // Here you can add more functionality to handle the order
}

function redirectToSocialMedia(platform) {
    const urls = {
        facebook: "https://www.facebook.com",
        instagram: "https://www.instagram.com",
        zomato: "https://www.zomato.com",
        swiggy: "https://www.swiggy.com"
    };
    window.open(urls[platform], "_blank");
}

// Example of generating an automated bill
function generateBill(orderDetails) {
    let total = 0;
    orderDetails.forEach(item => {
        total += item.price;
    });
    alert("Your total bill is: $" + total);
}