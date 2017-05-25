import React from 'react';
import GeneralMessages from './general-messages';
import Opinions from './opinions';
import './style.css';

export default class DiscussRoom extends React.Component{
  render(){
    return(
      <div className="wln-discuss-room">
        <ul className="nav nav-tabs">
          <li className="active"><a data-toggle="tab" href="#home">Thảo luận chung</a></li>
          <li><a data-toggle="tab" href="#menu1">Ý kiến phát biểu</a></li>
        </ul>
        <div className="tab-content">
          <GeneralMessages/>
          <Opinions/>
        </div>
      </div>

    )
  }
}
