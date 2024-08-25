import logo from './logo.svg';
import './App.css';
import Name from './component/Name/Name';
import Section from './component/Section/Section';
import Description from './component/Description/Description';

function App() {
  const userInformation = {
    firstName: "Carlo",
    lastName: "Bernardo",
    section: "BSIT-3A",
    description: "A very kind Student"
  }
  return (
    <div className="App">
      <Name firstName={userInformation.firstName} lastName={userInformation.lastName}/>
      <Section section={userInformation.section}/>
      <Description description={userInformation.description}/>
    </div>
  );
}

export default App;
