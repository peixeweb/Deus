const sharp = require('sharp');
const fs = require('fs');
const path = require('path');

const assetsDir = path.join(__dirname, 'public', 'assets');
const files = fs.readdirSync(assetsDir).filter(f => /\.(jpg|jpeg|png)$/i.test(f));

(async () => {
  for (const file of files) {
    const input = path.join(assetsDir, file);
    const output = path.join(assetsDir, file.replace(/\.(jpg|jpeg|png)$/i, '.webp'));
    
    const inputSize = fs.statSync(input).size;
    
    await sharp(input)
      .webp({ quality: 80 })
      .toFile(output);
    
    const outputSize = fs.statSync(output).size;
    const reduction = ((1 - outputSize / inputSize) * 100).toFixed(1);
    
    console.log(`${file} -> ${path.basename(output)} (${(inputSize/1024).toFixed(0)}KB -> ${(outputSize/1024).toFixed(0)}KB, -${reduction}%)`);
  }
  console.log('\nConversão concluída!');
})();
