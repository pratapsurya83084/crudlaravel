import Register from './pages/auth/Register'
import Home  from './pages/Home'
import Login  from './pages/auth/Login'
import Layout from './pages/Layout'
import {  BrowserRouter as Router,Routes,Route}  from 'react-router-dom'


function App() {

  return (
<Router>
  <Routes>
    <Route   path='/' element={<Layout/>}  />

    <Route   element={<Home/>}  />
<Route    path='/register' element={<Register/>} />     
<Route    path='/login' element={<Login/>} />   
  </Routes>
</Router>
  )
}

export default App
