import logo from './logo.svg';
import './App.css';
import { BrowserRouter as Router, Link, Route, Routes } from 'react-router-dom';
import Problem1 from './Problems/Problem1';
import Problem2 from './Problems/Problem2';
function App() {
  return (
    <Router>
      <div className="App">
        <h1>Problem List</h1>

        <Link to="/Problem1">
          <button className='btn-problem'>Problem 1</button>
        </Link>

        <Link to="/Problem2">
          <button className='btn-problem'>Problem 2</button>
        </Link>

        {/* Add routes for each problem page */}
        <Routes>
        <Route path="/Problem1" element={<Problem1 />} />
        <Route path="/Problem2" element={<Problem2/>} />
        </Routes>
      </div>
    </Router>
  );
}

export default App;
