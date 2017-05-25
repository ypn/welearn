import React from 'react';
import * as CourseAction from '../actions/course-action';

export default class AddSection extends React.Component{
  render(){
    return(
      <div className="input-group">
        <span className="input-group-addon">
        Nhập tiêu đề để thêm phần mới:
        </span>
        <input ref="entry_section_title" type="text" className="form-control" placeholder="Ví dụ:Giới thiệu về khóa học"/>
        <span className="input-group-addon" style={{cursor: 'pointer'}} onClick={this.addSection.bind(this)} type="button">
          Thêm
        </span>
      </div>
    )
  }

  addSection(){
    if(this.refs.entry_section_title.value!==''){
      CourseAction.addSection(this.refs.entry_section_title.value);
      this.refs.entry_section_title.value='';
    }
  }
}
