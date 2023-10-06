
const formsubmit= async (event)=>{
  event.preventDefault();
    let name=document.querySelector('#name')
    let email=document.querySelector('#email')
    let phoneNumber=document.querySelector('#phoneNumber')
    
    if( !name || !phoneNumber|| !email){
        return alert('Please Fill All Fields')
    }
    
    let regex = /(0|91)?[6-9][0-9]{9}/;
    if(!regex.test(phoneNumber.value)){
      return alert('Invalid Phone Number and Phone Number Should be 10 digits Long')
    }
    
    let mailformat = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
    if(!mailformat.test(email.value)){
       return alert('Invalid Email address')
    }

    let obj={
      companyName:name.value,
        email:email.value,
        phoneNumber:phoneNumber.value,
        preference,
        category
    }
    console.log(obj)
    name.value=''
    phoneNumber.value=''
    email.value=''
        
  console.log(window)
        try{
            
         await   fetch('https://ecfilesolutions.com/landing/users/', {
    method: 'POST',
    headers: {
        'Accept': 'application/json',
        'Content-Type': 'application/json'
    },
    body: JSON.stringify(obj)
})
   .then(response => response.json())
   .then(response => alert(response.message))

        }catch(err){
            alert('some Internal error please try again later')
        }


}

