import React from 'react';

function App() {
  return (
    <div className="App">
      <div className="container">
        <h1>À propos</h1>

        <div style={{ display: 'flex' }}>
          <div style={{ flex: 1, marginRight: '10px', marginTop: '10px' }}>
            <div style={{ textAlign: 'left', border: '1px solid transparent', padding: '1px', maxWidth: '500px', height: '250px' }}>
              <p style={{ color: 'blue', fontSize: '20px' }}>Plateforme de conformité</p>
              <p style={{ fontWeight: 'bold', color: 'black', fontSize: '40px' }}>Évaluation simple de la conformité avec la norme ISO 27001</p>
            </div>
          </div>
          <div style={{ flex: 1, marginTop: '10px' }}>
            <div style={{ border: '1px solid transparent', padding: '1px', maxWidth: '500px', height: '250px' }}>
              <img src="http://localhost:3000/ImageAbout.jpeg" alt="image about" style={{ width: '100%', height: '100%' }} />
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}

export default App;