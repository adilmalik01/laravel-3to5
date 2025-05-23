<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Product</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts for style -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap">
    <style>
        body {
            min-height: 100vh;
            margin: 0;
            background: linear-gradient(102.3deg, #93718b 5.9%, #ead3ef 64%, #e8e8fc 89%);
            font-family: 'Playfair Display', serif, Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .glass-card {
            background: rgba(255,255,255,0.85);
            box-shadow: 0 8px 32px 0 rgba(31,38,135,0.20);
            border-radius: 16px;
            padding: 2.5rem 2rem;
            backdrop-filter: blur(8px);
            width: 100%;
            max-width: 540px;
            margin: 32px 0;
            border: 1.2px solid #dbdbeb;
            animation: fadeIn 0.7s cubic-bezier(.21,1.02,.73,1) 1;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px);}
            to   { opacity: 1; transform: translateY(0);}
        }
        .title {
            font-size: 2.2rem;
            font-weight: 700;
            letter-spacing: 1px;
            text-align: center;
            margin-bottom: 2rem;
            background: linear-gradient(90deg, #9b87f5, #33c3f0);
            -webkit-background-clip: text;
            color: transparent;
            background-clip: text;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        .field-group {
            display: flex;
            flex-direction: column;
        }
        label {
            font-weight: 600;
            color: #463b6b;
            margin-bottom: 6px;
            font-size: 1rem;
            letter-spacing: 0.2px;
        }
        input, select, textarea {
            border: 1.2px solid #ccc;
            border-radius: 6px;
            padding: 10px 12px;
            font-size: 1rem;
            background: #fafaff;
            box-shadow: 0 2px 4px 0 rgba(194,194,239,.06);
            transition: border 0.18s, box-shadow 0.18s;
        }
        input:focus, select:focus, textarea:focus {
            outline: none;
            border: 1.5px solid #9b87f5;
            box-shadow: 0 2px 8px 0 #e8e0fe80;
        }
        textarea {
            resize: vertical;
            min-height: 60px;
        }
        .input-row {
            display: flex;
            gap: 1rem;
        }
        .input-row .field-group {
            flex: 1;
        }
        button {
            margin-top: 1.5rem;
            background: linear-gradient(90deg, #9b87f5, #33c3f0);
            border: none;
            border-radius: 8px;
            padding: 12px 0;
            color: #fff;
            font-size: 1.08rem;
            font-weight: bold;
            letter-spacing: 1px;
            cursor: pointer;
            box-shadow: 0 4px 14px 0 #29a5ff22;
            transition: transform 0.12s, box-shadow 0.15s;
        }
        button:hover {
            transform: translateY(-2px) scale(1.03);
            box-shadow: 0 6px 20px 0 #8e9be070;
        }
        @media (max-width: 700px) {
            .glass-card { padding: 1.3rem 0.6rem; }
            .input-row { flex-direction: column; gap: 0.5rem; }
        }
    </style>
</head>
<body>
<div class="glass-card">
    <div class="title">Add New Product</div>
    <form method="POST" action="/submit-form">
        @csrf
        <div class="field-group">
            <label for="product_name">Product Name</label>
            <input type="text" name="product_name" id="product_name" placeholder="e.g., iPhone 15 Pro Max" required>
        </div>
        <div class="field-group">
            <label for="product_description">Product Description</label>
            <textarea name="product_description" id="product_description" placeholder="Describe your product..." required></textarea>
        </div>
        <div class="input-row">
            <div class="field-group">
                <label for="product_category">Category</label>
                <select name="product_category" id="product_category" required>
                    <option value="" disabled selected>Select category</option>
                    <option>Electronics</option>
                    <option>Clothing</option>
                    <option>Books</option>
                    <option>Home &amp; Kitchen</option>
                    <option>Other</option>
                </select>
            </div>
            <div class="field-group">
                <label for="product_price">Price ($)</label>
                <input type="number" step="0.01" min="0" name="product_price" id="product_price" placeholder="199.99" required>
            </div>
        </div>
        <div class="input-row">
            <div class="field-group">
                <label for="product_stock">Stock</label>
                <input type="number" step="1" min="0" name="product_stock" id="product_stock" placeholder="50" required>
            </div>
        </div>
        <button type="submit">Add Product</button>
    </form>
</div>
</body>
</html>
