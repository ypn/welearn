import React from 'react';

export default class AddMessage extends React.Component{

  autoExpandInput(){
    var el = this.refs.entry_text;
    setTimeout(function(){
     el.style.cssText = 'height:auto; padding:0';
     // for box-sizing other than "content-box" use:
     // el.style.cssText = '-moz-box-sizing:content-box';
     el.style.cssText = 'height:' + el.scrollHeight + 'px';
   },0);
  }

  render(){
    return(
        <div className="entry-message-wrapper">
          <div className="flex">
              <img className="user-profile-picture" src="http://znews-photo-td.zadn.vn/w1024/Uploaded/neg_rtlzofn/2017_01_23/14494601_177404746951l3484_2482115257403382069_n.jpg"/>
              <div className="entry-box">
                 <label className="user-name">Phạm Như Ý</label>
                 <textarea ref="entry_text" onKeyDown={this.autoExpandInput.bind(this)} type="text" className="form-control entry-message" rows="1" placeholder="Bạn muốn hỏi gì...?"/>
               </div>
         </div>
           <div className="entry-emoji">
             <a href="javascript:void(0);"><i className="fa fa-smile-o" aria-hidden="true"></i></a>
             <a href="javascript:void(0);" className="pull-right"><i className="fa fa-paper-plane" aria-hidden="true"></i></a>
           </div>
        </div>
    )
  }
}
