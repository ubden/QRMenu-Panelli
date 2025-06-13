const express = require('express');
const fs = require('fs').promises;
const path = require('path');

const app = express();
app.use(express.json());
app.use(express.static(__dirname));

const saveHandler = async (req, res) => {
  const { user, data } = req.body;
  if (!user || !data) {
    return res.status(400).send('Missing user or data');
  }
  const filePath = path.join(__dirname, 'nook', `${user}.json`);
  try {
    await fs.writeFile(filePath, JSON.stringify(data, null, 2), 'utf8');
    res.sendStatus(200);
  } catch (err) {
    console.error('Error saving menu:', err);
    res.status(500).send('Failed to save');
  }
};

app.post('/save-menu', saveHandler);
app.post('/save-menu.php', saveHandler);

const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
  console.log(`Server running on port ${PORT}`);
});
