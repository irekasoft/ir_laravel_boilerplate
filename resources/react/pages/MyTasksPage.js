import React, { Component } from 'react'
import ReactDOM from 'react-dom'

import axios from 'axios';

class MyTasksPage extends Component {

  componentDidMount(){

    axios.get('/api/whoami').then(res=>{
      console.log('res', res.data);
    }).catch(e=>{
      console.log('e', e);
    })

  }

  render() {
    return (
      <div>
        
      </div>
    );
  }
}


export default MyTasksPage;

const element = document.getElementById('MyTasksPage');
if (element) {
  const props = Object.assign({},element.dataset);
  ReactDOM.render(<MyTasksPage {...props} />, element);
}