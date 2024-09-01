function book(PricePerPerson){
    const numOfPersons=prompt("Enter the number of person :");

    if(numOfPersons !=null){
        var totalPrice=PricePerPerson*numOfPersons;
        alert(`Total cost for ${numOfPersons} person is ${totalPrice}`);
    }
}