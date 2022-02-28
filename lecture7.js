// Examples for Lecture 7 on use of AJAX to create dynamic web apps
// Collection of helper functions
// Prof. Frank Emanuel


function asynchRequest(){

    try {
        request = new XMLHttpRequest();    
    } catch (e1) {
        try {
            request = new ActiveXObject("Msxml12.XMLHTTP");
        } catch (e2) {
            try {
                request = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e3){
                request = false;
            }
        }

    return request;
}


var connection = new XMLHttpRequest();

connection.open("GET", "my_information.txt", true);
connection.send();


function libraryLookup() {

    let library = 
    {
        "library" : [
    
            {   "category" : "cooking" ,
                "book" : [
                    {   "title" : "Everyday Italian",
                        "langugage" : "en",
                        "author" : "Giada de Laurentiis",
                        "year" : 2005,
                        "price" : 30.00
                    }
                ]
            },
    
            {   "category" : "children" ,
                "book" : [
                    {   "title" : "Thanks a Lot, Universe",
                        "langugage" : "en",
                        "author" : "Chad Lucas",
                        "year" : 2021,
                        "price" : 21.99
                    }
                ]
            }
        ]
    }

    console.log( library.category);
}











function testing() {

    try {
    
        foobar();

    } catch (e1) {

        console.log("oh no... " + e1 + " has occured!");
    
    }
}