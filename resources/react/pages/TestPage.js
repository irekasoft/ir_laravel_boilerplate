import React, { Component } from 'react'
import ReactDOM from 'react-dom'

import CalendarHeatmap from 'react-calendar-heatmap';
import 'react-calendar-heatmap/dist/styles.css';

class TestPage extends Component {

  render() {
    return (
    <React.Fragment>
    <div className="container">
      <h1>React Page</h1>
        <button className="btn btn-primary btn-sm"
            onClick={()=>{
                alert('Hello');
            }}
        >Hello</button>

        <hr/>

        <button className="btn btn-primary btn-sm"
            onClick={()=>{
                alert('Hello');
            }}
        >Hello</button>


      <h3>Heatmap</h3>

      <CalendarHeatmap
        startDate={new Date('2021-01-01')}
        endDate={new Date('2021-12-31')}
        values={[
          { date: '2021-01-01', count: 12 },
          { date: '2021-01-22', count: 122 },
          { date: '2021-01-30', count: 38 },
          // ...and so on
        ]}
      />


    </div>
    </React.Fragment>
    );
  }

}

export default TestPage;

if (document.getElementById("root")) {
  ReactDOM.render(<TestPage />, document.getElementById("root"));
}
