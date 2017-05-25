import React from 'react';
import ListMessages from './list-messages';
import AddMessage from './add-message';

export default class GeneralMessages extends React.Component{
  render(){
    return(
      <div className="tab-pane fade in active" id="home">
        <ListMessages/>
        <AddMessage/>
      </div>
    )
  }
}
