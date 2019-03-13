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
      <div className="tool-card">
        <Card
          hoverable
          style={{ width: 260, marginBottom: 10 }}
          cover={<img alt={this.props.tool.title.rendered} src={this.props.tool.cover_image} />}
          actions={[<a href={this.props.tool.download} target="_blank" download><Icon type="download" /></a>,<a href={this.props.tool.link}><Icon type="info-circle" /></a>]}>
          <Meta
            title={this.props.tool.title.rendered}
            description={this.displayDescription(this.props.tool.excerpt.rendered)}
            />
        </Card>
      </div>
    )
  }
}

export default ToolCard;

//,<Icon type="share-alt" />
