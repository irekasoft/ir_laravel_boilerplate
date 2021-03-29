import React, { Component } from 'react'
import ReactDOM from 'react-dom'

import CalendarHeatmap from 'react-calendar-heatmap'
import 'react-calendar-heatmap/dist/styles.css'

import axios from 'axios'

import uuid from 'uuid/v4'

class TestPage extends Component {

  constructor(props){
    super(props);

    this.state = {
      order_id: props.order_id,
      title: 'Hello World as',
    }

  }

  componentDidMount() {

  }


  render() {
    return (
    <React.Fragment>
    <div className="container">
      <h1>{this.state.title}</h1>
        <button className="btn btn-primary btn-sm"
            onClick={()=>{

                // alert('Hello');

                this.setState({
                    title: "Hello ABC"
                })

            }}
        >Hello</button>

        <hr/>

      {this.props.order_id} /

      {this.state.order_id}


      {/* <h3>Heatmap</h3> */}
{/*
      <CalendarHeatmap
        startDate={new Date('2021-01-01')}
        endDate={new Date('2021-12-31')}
        values={[
          { date: '2021-01-01', count: 12 },
          { date: '2021-01-22', count: 122 },
          { date: '2021-01-30', count: 38 },
          // ...and so on
        ]}
      /> */}

    </div>
    </React.Fragment>
    );
  }

}

export default TestPage;

if (document.getElementById("root")) {

  const element = document.getElementById('root');
  const props = Object.assign({},element.dataset);

  ReactDOM.render(<TestPage {...props} />, document.getElementById("root"));
}
