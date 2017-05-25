import React from 'react';
import Lesson from './lesson';
import * as CourseAction from '../actions/course-action';
import CourseStores from '../stores/course-stores';

class SectionHeader extends React.Component{

  render(){
    return(
      <thead>
        <tr className="success">
          <th colSpan={4}>
            <span>Phần {this.props.index + 1}:</span> {this.props.title}
          </th>
        </tr>
        <tr className="success">
          <th>#</th>
          <th>Tên bài giảng</th>
          <th>Ngày bắt đầu</th>
          <th>
            <button className="btn btn-primary btn-xs" onClick={this.handleAddLesson.bind(this)}>Thêm</button>
            <button className="btn btn-danger btn-xs" onClick={this.handeDeleteSection.bind(this)}>Xóa</button>
          </th>
        </tr>
      </thead>
    )
  }

  handleAddLesson(){
    CourseAction.addLesson(this.props.index);
  }

  handeDeleteSection(){
    CourseAction.deleteSection(this.props.index);
  }
}


class SectionBody extends React.Component{
  render(){
    var sections = CourseStores.getAllSection();
    var pre =1;
    for(let i = 0; i < this.props.index ; i++){
      pre += sections[i].lessons.length;
    }

    return (
      <tbody>
        {
          this.props.lessons.map((note,index)=>{
            return (  <Lesson index={index} key ={index} sectionIndex={this.props.index} lessonIndex = {pre + index} /> )
          })
        }
      </tbody>
    )
  }
}

export default class SingleSection extends React.Component{
  render(){
    return(
      <table className="table table-bordered">
        <SectionHeader title={this.props.note.title} index={this.props.index}/>
        <SectionBody lessons = { this.props.note.lessons } key = {this.props.index} index={this.props.index}/>
      </table>
    )
  }
}
