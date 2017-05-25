import React from 'react';
import AddSection from './add-section';
import ListSection from './list-section';
import CourseStores from '../stores/course-stores';


export default class CourseDesigner extends React.Component{
  constructor(props){
    super(props);
    this.state = {
      totalLessons :CourseStores.getTotalLessons(),
      totalSections: CourseStores.getTotalSections()
    }
  }

  componentWillMount(){
    CourseStores.on('create-new-section',()=>{
      this.setState({
        totalSections:CourseStores.getTotalSections()
      });
    });

    CourseStores.on('delete-section',()=>{
      this.setState({
        totalSections:CourseStores.getTotalSections(),
        totalLessons:CourseStores.getTotalLessons()
      });
    });


    CourseStores.on('lesson-change',()=>{
      this.setState({
        totalLessons:CourseStores.getTotalLessons()
      });
    });

  }

  render(){
    return(
      <div>      
        <p>
          * Mỗi khóa học sẽ gồm nhiều phần. Mỗi phần sẽ là tập hợp của nhiều bài giảng.
          Hãy mô tả rõ lộ trình của bạn cho khóa học của mình. Khóa học gồm bao nhiêu phần?
          Tiêu đề mỗi phần? Mỗi phần gồm những bài nào? Đầu đề mỗi bài giảng?
          Bạn có thể thay đôi lại thông tin này sau để phù hợp với quá trình giảng dạy.
        </p>
        <div style={{marginBottom:20 + 'px'}}>
          Điền tiêu đề vào vào form sau và click <span className="btn btn-primary btn-xs">Thêm</span> để thêm 1 phần mới cho khóa học.
        </div>
        <span>Khóa học hiện tại đang có <b>{this.state.totalSections}</b> phần và <b>{this.state.totalLessons}</b> bài.</span>
        <AddSection/>
        <ListSection/>
      </div>
    )
  }
}
