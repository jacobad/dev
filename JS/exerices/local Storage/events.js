function onClickAddContact(){
	$('#contact-form').fadeIn('low');
}

var DataSaveTab = load();
refreshAddressBook(DataSaveTab);


function load() {

	var addressBook = loadDataFromDomStorage('Datas');
    
    if(addressBook == null)
    {
    	addressBook = []
    }
    
    return addressBook;

}


function onClickSaveContact()
{

	var Datas = createContact
    (
        $('select[name=title]').val(),
        $('input[name=firstName]').val(),
        $('input[name=lastName]').val(),
        $('input[name=phone]').val()
    );
	
    
	DataSaveTab.push(Datas)
	//console.log(Datas);
	saveDataToDomStorage('Datas', DataSaveTab);
	
	refreshAddressBook(DataSaveTab);
}
function createContact(title, firstName, lastName, phone)

{
	var contact     = {};
    contact.title = title;
    contact.firstName = firstName;
    contact.lastName  = lastName;
    contact.phone     = phone;
    
    return contact;
}



function refreshAddressBook(ShowAdd){
   
	 $('#ShowAdd').empty();
     
     var addressBookList = $('<ul>');

     
    for(var index = 0; index < ShowAdd.length; index++)
    {
    	var li = $('<li data-id="'+index+'">');
        li.append(ShowAdd[index].firstName+' '+ShowAdd[index].lastName);
        
        addressBookList.append(li);
    
    }
    
    $('#ShowAdd').html(addressBookList);    
}

function onClickShowDetail(){
	$('#ShowDetail').fadeIn('low')
	$('#contact-details h3').text(ShowDetail[id].title+'. '+ShowDetail[id].firstName+' '+ShowDetail[id].lastName);
    $('#contact-details p').text(ShowDetail[id].phone);   
    $('#contact-details').data('id', id);
    
};