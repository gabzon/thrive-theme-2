// tutorial on dangerouslySetInnerHTML https://deepscan.io/docs/rules/react-bad-danger-format

import React from 'react';
import { Card, Icon } from 'antd';

const { Meta } = Card;

class ToolCard extends React.Component {
  constructor(){
    super();
    this.displayDescription = this.displayDescription.bind(this);
  }

  displayDescription(desc){
    return <div dangerouslySetInnerHTML={{ __html : desc }} />
  }

  render(){
    return(
      <a href={this.props.tool.link} >
        <Card
          hoverable
          style={{ width: 340, marginBottom: 10}}
          cover={<img alt="example" src="https://os.alipayobjects.com/rmsportal/QBnOOoLaAfKPirc.png" />}
          actions={[<Icon type="download" />, <a href={this.props.tool.link}><Icon type="info-circle" /></a>, <Icon type="share-alt" />]}
          >
          <Meta
            title={this.props.tool.title.rendered}
            description={this.displayDescription(this.props.tool.excerpt.rendered)}
            />
        </Card>
      </a>
    )
  }
}

export default ToolCard;
