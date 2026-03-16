document.addEventListener("DOMContentLoaded", function() {
    
    const unitPrice = 5000;
    

    const quantityInput = document.getElementById("quantity");
    const totalPriceDisplay = document.getElementById("total-price");
    
    let couponGiven = false;

    quantityInput.addEventListener("input", function() {
        

        let quantity = Number(quantityInput.value);


        if (quantity < 0) {
            quantityInput.value = 0; 
            quantity = 0;            
            alert("Quantity cannot be less than 0.");
        }

        let total = unitPrice * quantity;
        
        totalPriceDisplay.value = total;

        if (total > 1000 && couponGiven === false) {
    
            setTimeout(function() {
                alert("Congratulations! You are eligible for a gift coupon!");
            }, 10);
            
            couponGiven = true; 
        } 
        
        if (total <= 1000) {
            couponGiven = false;
        }
    });
});