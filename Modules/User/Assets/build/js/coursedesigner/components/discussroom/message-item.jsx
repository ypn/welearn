import React from 'react';

export default class MessageItem extends React.Component{
  render(){
    return(
      <div className="message-item">
        <img src="http://znews-photo-td.zadn.vn/w1024/Uploaded/neg_rtlzofn/2017_01_23/14494601_177404746951l3484_2482115257403382069_n.jpg" className="user-profile-picture" />
        <div className="message">
          <label className="user-name">Pham Nhu Y</label>
          <span className="message-content">Mỗi phần sẽ là tập hợp của nhiều bài giảng. Hãy mô tả rõ lộ trình của bạn cho Mỗi phần sẽ</span>
        </div>
      </div>
    )
  }
}
