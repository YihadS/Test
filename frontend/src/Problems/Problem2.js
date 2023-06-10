import React, { useState } from 'react';
import './Problem.css';

const Problem2 = () => {
  const [input, setInput] = useState('');
  const [output, setOutput] = useState('');

  const solveProblem2 = async () => {
    // Send AJAX request to the backend API
    const response = await fetch('http://localhost:8000/api/problem-2', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({ input }),
    });
  
    // Parse the JSON response
    const data = await response.json();
  
    // Set the output state with the JSON-formatted result
    setOutput(JSON.stringify(data));
  };

  return (
    <div>
      <textarea
        id="input-2"
        value={input}
        onChange={(e) => setInput(e.target.value)}
      ></textarea>
      <button onClick={solveProblem2} className='btn-solution'>Solve Problem</button>
      <pre id="output-2">{output}</pre>
    </div>
  );
};

export default Problem2;