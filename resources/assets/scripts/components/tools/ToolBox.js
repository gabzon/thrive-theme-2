import React from 'react';
import ToolCard from './ToolCard';

class ToolBox extends React.Component {

  constructor(){
    super();
    this.state = {
      tools: [],
    }
  }

  componentDidMount(){
    const dataURL = 'https://thrive.tools/wp-json/wp/v2/tool?per_page=100';
    fetch(dataURL)
    .then( res => res.json() )
    .then( res => {
      this.setState({
        tools: res,
      })
    })
  }

  render(){
    let tools = this.state.tools.map((tool,i) => {
      return <ToolCard tool={tool} key={i}/>
    });
    return(
      <div className="toolbox-wrapper" style={{display:'flex', flexWrap:'wrap', justifyContent: 'space-around'}}>
        {tools}
      </div>
    )
  }

}

export default ToolBox;
