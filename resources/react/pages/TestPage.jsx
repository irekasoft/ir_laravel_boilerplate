import React, { Component } from 'react'
import ReactDOM from 'react-dom'

import axios from 'axios' // connection to API


class TestPage extends Component {

  constructor(props){
    super(props);

    this.state = {
      order_id: props.order_id,
      title: 'Hello World as',
      count: 112312,
    }

  }

  componentDidMount() {

  }

  render() {
    return (
    <React.Fragment>
    <div className="container py-4">
      
      <h2>Hello Boilerplate </h2>

      <button className="btn btn-primary btn-sm me-2"
        onClick={()=>{

          // alert('Hello');
          this.setState({
            count: this.state.count - 1,
          });
          
        }}
      >
        Minus
      </button>

      <button className="btn btn-primary btn-sm"
        onClick={()=>{

          // alert('Hello');
          this.setState({
            count: this.state.count + 1,
          });
          
        }}
      >
        Plus
      </button>

      <hr/>

      Count : {this.state.count}

    </div>
    </React.Fragment>
    );
  }

}

export default TestPage;

if (document.getElementById("TestPage")) {

  const element = document.getElementById('TestPage');
  const props = Object.assign({},element.dataset);

  ReactDOM.render(<TestPage {...props} />, document.getElementById("TestPage"));
}
