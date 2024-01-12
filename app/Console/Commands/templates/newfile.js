import React, { Component } from 'react'
import ReactDOM from 'react-dom'

class {{filename}} extends Component {
  render() {
    return (
      <div>
        {{filename}}
      </div>
    );
  }
}


export default {{filename}};

const element = document.getElementById('{{filename}}');
if (element) {
  const props = Object.assign({},element.dataset);
  ReactDOM.render(<{{filename}} {...props} />, element);
}