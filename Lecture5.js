// Frank Emanuel
// February 7, 2022

function myFunction () {

    // some variables that are scoped to myFunction

    let a=12, b='Monday', c=true, d;

    console.log(a + ' ' + b + '.');

    console.log( typeof(c));

    
}

(c) ? console.log( 'the value is true') : console.log( 'the value is false');