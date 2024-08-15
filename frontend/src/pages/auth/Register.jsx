import React, { useState } from 'react'

const Register = () => {

    const [formData,setFormData]=useState({
name:'',
email:'',
password:'',
password_confirmation:'',
    })

    function handelRegister(e){
        e.preventDefault();
        console.log(formData)
    }
  return (
    <form 
    onSubmit={handelRegister}
    className='w-1/2 mx-auto space-y-6'>
        <h1>register form</h1>
   <div>
    <input type="text" placeholder='Name'  value={formData.name}
    onChange={(e)=>setFormData({})}
    />
   </div>

   <div>
    <input type="text"  placeholder='Email' value={formData.email}/>
   </div>
   <div>
    <input type="Password"  value={formData.password}/>
   </div>
   <div>
    <input type="Confirm Password"  value={formData.password_confirmation}/>
   </div>

<button className='primary-btn'>register</button>
    </form>
  )
}

export default Register
