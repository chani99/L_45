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
        if (cash.canDispense(sum)) {
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

            if (sum == 0) {
                return give;

            } else {

                return "dosn't dispense";
            }

        } else {
            return "not enough";
        }
    },

    putout: function(give) { //dispense the bills out 
        return give;
    },

    cashBalance: function() { //how much money left in ATM
        var left = 0;
        for (i = 0; i < cash.denom.length; i++) {
            left += cash.denom[i] * cash.bills[i];


        };
        return "money left in ATM: " + left;
    }
}



cash.denom = [50, 100, 200];
cash.addBills([4, 1, 3]);

var g;
do {
    let sum = parseInt(prompt("enter a sum"));
    g = cash.dispense(sum);
    let check = recheck(g);

    if (check == "error1") {
        check = error1();
        check = recheck(check);

    }
    if (check == "error2") {
        check = error2();
        check = recheck(check);
    }

    if (check == "good!") {
        good();
    }

} while (!g);




function recheck(e) {
    if (e == "dosn't dispense") {
        return "error1";
    } else if (e == "not enough") {
        return "error2";
    } else {
        return "good!";
    }
}


function good() {
    alert(JSON.stringify(cash.putout(g)));
    alert(cash.cashBalance());

}

function error1() {
    sum = prompt("you didn't enter a ligal sum, enter a sum that dispenses in 50");
    g = cash.dispense(parseInt(sum));
    var check2 = recheck(g);
    return check2;
}

function error2() {
    sum = prompt("you didn't enter a ligal sum, enter a sum that dispenses in 50");
    g = cash.dispense(parseInt(sum));
    var check2 = recheck(g);
    return check2;
}