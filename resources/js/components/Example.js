import React, { Component } from 'react';
import { LayoutButton } from 'react-viewerbase';
import ReactDOM from 'react-dom';

class Example extends Component {
  constructor(props) {
    super(props);

    this.state = {
      selectedCell: {
        className: 'hover',
        col: 1,
        row: 1,
      },
    };
  }

  render() {
    return (
      <LayoutButton
        selectedCell={this.state.selectedCell}
        onChange={cell => this.setState({ selectedCell: cell })}
      />
    );
  }
}

if (document.getElementById('example-dicom')) {
	ReactDOM.render(<Example />, document.getElementById('example-dicom'));
}

//
//
//
//
//function Example() {
//    return (
//        <div className="container">
//            <div className="row justify-content-center">
//                <div className="col-md-8">
//                    <div className="card">
//                        <div className="card-header">Example Component</div>
//
//                        <div className="card-body">I'm an example component!</div>
//                    </div>
//                </div>
//            </div>
//        </div>
//    );
//}

//export default Example;
//
//if (document.getElementById('example')) {
//    
//}
