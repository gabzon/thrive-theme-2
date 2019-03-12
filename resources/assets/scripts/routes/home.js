import React from 'react';
import ReactDOM from 'react-dom';
import ToolBox from '../components/tools/ToolBox';

export default {
  init() {    
    class Home extends React.Component{
      render(){
        return <div>
          <ToolBox />
        </div>
      }
    }
    ReactDOM.render(<Home />, document.getElementById('toolbox'))
  },
  finalize() {
  },
};
