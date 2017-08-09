var cash = {
    denom: [],
    bills: [0, 0, 0],
    addBills: function(bills) { //add bills to the ATM
        for (i = 0; i < cash.bills.length; i++) {
            cash.bills[i] += bills[i];
        }
    },
    canDispense: function(sum) { //if ATM have enough to dispense the sum
        for (var i = this.denom.length - 1; i >= 0; i--) {
            sum -= Math.min(sum / this.denom[i], this.bills[i]) * this.denom[i];
        }
        return sum == 0;
    },

    dispense: function(sum) { // check if can dispense, if so call putout
        var sum = sum;
        var check = cash.canDispense(sum);
        if (check == true) {
            var give = [];
            for (var i = this.denom.length - 1; i >= 0; i--) {
                for (var x = this.bills[i]; x > 0; x--) {
                    if (sum - (cash.denom[i] * x) >= 0) {
                        give.push(x + " bills of: " + cash.denom[i]);
                        sum -= (cash.denom[i] * x);
                        cash.bills[i] -= x;
                    }
                }
            }
        } else {
            sum = prompt("ATM has'nt got enough to dispense the sum, please enter a new sum");
            check = checkAgain(sum);
        }

        if (sum == 0) {
            this.putout(give);
        } else {
            sum = prompt("you didn't enter a ligal sum, enter a sum that dispenses in 50");
            check = checkAgain(sum);

        }
    },

    putout: function(give) { //dispense the bills out 
        alert(JSON.stringify(give));
        cash.cashBalance();
    },

    cashBalance: function() { //how much money left in ATM
        var left = 0;
        for (i = 0; i < cash.denom.length; i++) {
            left += cash.denom[i] * cash.bills[i];
        };
        alert("money left in ATM: " + left);
    }
}


cash.denom = [50, 100, 200];
cash.addBills([4, 1, 3]);
console.log(cash.dispense(parseInt(prompt("enter a sum"))));

function checkAgain(sum) {
    cash.Dispense(sum);

}