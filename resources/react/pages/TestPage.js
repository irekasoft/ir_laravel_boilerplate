import React, { Component } from 'react'
import ReactDOM from 'react-dom'

class TestPage extends Component {

  render() {
    return (
    <div className="container">
        <h1>TestPage</h1>
        <button className="btn btn-primary btn-sm"
            onClick={()=>{
                alert('Hello');
            }}
        >Hello</button>
    </div>
    );
  }

}

export default TestPage;

if (document.getElementById("root")) {
  ReactDOM.render(<TestPage />, document.getElementById("root"));
}
