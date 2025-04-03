# Loja-teste





<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carregando WhatsApp</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            background-color: #ffffff;
            font-family: 'Open Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Helvetica Neue', sans-serif;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #3b4a54;
            overflow: hidden;
        }
        
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
            width: 100%;
            max-width: 500px;
            padding: 20px;
        }
        
        .logo-container {
            position: relative;
            margin-bottom: 50px;
            transition: transform 0.3s ease;
        }
        
        .logo-container:hover {
            transform: scale(1.05);
        }
        
        .logo {
            width: 120px;
            height: 120px;
            background-color: white;
            border-radius: 24px;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            position: relative;
            z-index: 2;
            cursor: pointer;
        }
        
        .logo svg {
            width: 70px;
            height: 70px;
        }
        
        .logo-shadow {
            position: absolute;
            width: 90px;
            height: 20px;
            background: radial-gradient(ellipse at center, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0) 70%);
            bottom: -25px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 50%;
            filter: blur(5px);
            z-index: 1;
            opacity: 0.7;
        }
        
        .progress-container {
            width: 240px;
            height: 6px;
            background-color: #e9edef;
            border-radius: 10px;
            margin-bottom: 20px;
            overflow: hidden;
        }
        
        .progress-bar {
            height: 100%;
            width: 0%;
            background-color: #25d366;
            border-radius: 10px;
            transition: width 0.2s;
            animation: progressAnimation 3s infinite;
        }
        
        .spinner {
            width: 40px;
            height: 40px;
            margin-bottom: 20px;
            position: relative;
            animation: pulse 2s infinite;
        }
        
        .spinner:before {
            content: '';
            box-sizing: border-box;
            position: absolute;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 3px solid rgba(37, 211, 102, 0.3);
            border-top-color: #25d366;
            animation: spin 1s linear infinite;
        }
        
        .text {
            font-size: 16px;
            margin-bottom: 12px;
            text-align: center;
            font-weight: 500;
            color: #3b4a54;
            letter-spacing: 0.2px;
            opacity: 0;
            animation: fadeInOut 2s infinite;
        }
        
        .subtext {
            font-size: 14px;
            margin-bottom: 15px;
            text-align: center;
            color: #667781;
            opacity: 0.9;
        }
        
        .tip {
            margin-top: 30px;
            font-size: 13px;
            color: #667781;
            text-align: center;
            background-color: #f0f2f5;
            padding: 12px 20px;
            border-radius: 8px;
            max-width: 350px;
            opacity: 0;
            transform: translateY(20px);
            animation: slideUp 0.5s forwards 1s;
        }
        
        .footer {
            position: fixed;
            bottom: 20px;
            font-size: 13px;
            color: #8696a0;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .footer img {
            height: 16px;
            margin-right: 6px;
        }
        
        .dot-container {
            display: flex;
            justify-content: center;
            margin-top: 15px;
            margin-bottom: 30px;
        }
        
        .dot {
            width: 8px;
            height: 8px;
            background-color: #e9edef;
            border-radius: 50%;
            margin: 0 5px;
        }
        
        .dot.active {
            background-color: #25d366;
            animation: expandDot 1.5s infinite;
        }
        
        .ring {
            position: absolute;
            border: 2px solid #25d366;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            opacity: 0;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        
        .pulse-ring {
            animation: pulseRing 2s infinite;
        }
        
        @keyframes progressAnimation {
            0% { width: 0%; }
            20% { width: 20%; }
            40% { width: 40%; }
            60% { width: 65%; }
            80% { width: 85%; }
            95% { width: 95%; }
            100% { width: 100%; }
        }
        
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
        
        @keyframes fadeInOut {
            0% { opacity: 0.3; }
            50% { opacity: 1; }
            100% { opacity: 0.3; }
        }
        
        @keyframes expandDot {
            0% { transform: scale(1); }
            50% { transform: scale(1.5); }
            100% { transform: scale(1); }
        }
        
        @keyframes slideUp {
            to { opacity: 1; transform: translateY(0); }
        }
        
        @keyframes pulseRing {
            0% { transform: translate(-50%, -50%) scale(0.7); opacity: 0.3; }
            50% { opacity: 0; }
            100% { transform: translate(-50%, -50%) scale(1.5); opacity: 0; }
        }
        
        .cloud {
            position: fixed;
            width: 300px;
            height: 300px;
            background-color: rgba(233, 237, 239, 0.5);
            border-radius: 50%;
            filter: blur(60px);
            z-index: -1;
        }
        
        .cloud-1 {
            top: -100px;
            left: -100px;
        }
        
        .cloud-2 {
            bottom: -150px;
            right: -100px;
        }
    </style>
</head>
<body>
    <div class="cloud cloud-1"></div>
    <div class="cloud cloud-2"></div>
    
    <div class="container">
        <div class="logo-container" id="logoContainer">
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 175.216 175.552" fill="#25d366">
                    <path d="M87.4,16.574c39.02,0,70.729,31.708,70.729,70.731c0,39.022-31.708,70.73-70.729,70.73
                    c-12.941,0-25.115-3.5-35.571-9.595l-40.623,12.46l12.682-38.008C16.51,112.471,12.671,100.574,12.671,87.305
                    C12.671,48.282,44.38,16.574,87.4,16.574z M144.217,87.305c0-31.334-25.484-56.819-56.817-56.819
                    c-31.336,0-56.817,25.484-56.817,56.819c0,12.277,3.912,23.662,10.547,32.945l-6.811,20.468l21.287-6.648
                    c9.162,6.08,20.07,9.626,31.794,9.626C118.733,144.096,144.217,118.639,144.217,87.305z" />
                    <path d="M126.729,102.133l-16.915-5.512c-1.453-0.473-3.063-0.035-3.989,1.087l-5.669,6.805
                    c-0.972,1.167-2.526,1.577-3.894,1.024c-7.115-2.875-22.906-16.892-26.039-23.871c-0.633-1.414-0.322-3.068,0.776-4.093
                    l6.018-5.615c1.137-1.06,1.515-2.69,0.949-4.148l-6.734-17.146c-0.757-1.93-2.95-2.837-4.805-1.983
                    c-6.055,2.793-12.243,8.216-13.048,14.321c-1.698,12.852,4.085,29.061,24.257,46.904c20.601,18.271,36.992,22.353,49.82,19.018
                    c6.061-1.574,10.758-8.36,13.01-14.635C129.788,104.925,128.747,102.759,126.729,102.133z" />
                </svg>
                <div class="ring pulse-ring"></div>
            </div>
            <div class="logo-shadow"></div>
        </div>
        
        <div class="progress-container">
            <div class="progress-bar"></div>
        </div>
        
        <div class="text">Conectando ao servidor...</div>
        <div class="subtext">Verificando mensagens e contatos</div>
        
        <div class="dot-container">
            <div class="dot"></div>
            <div class="dot active"></div>
            <div class="dot"></div>
        </div>
        
        <div class="tip">
            Sabia que você pode usar o WhatsApp no computador e no celular ao mesmo tempo?
        </div>
    </div>
    
    <div class="footer">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="#8696a0">
            <path d="M12 2.04c-5.5 0-10 4.49-10 10.02 0 5.52 4.5 10.02 10 10.02s10-4.5 10-10.02c0-5.53-4.5-10.02-10-10.02zm0 18.03c-4.41 0-8-3.61-8-8.01s3.59-8.01 8-8.01 8 3.61 8 8.01-3.59 8.01-8 8.01zm0-6.63h-3v-1.5h3v-5h1.5v5H15v1.5h-1.5v1.5H12v-1.5z"/>
        </svg>
        por Meta
    </div>
    
    <script>
        // Adiciona interatividade ao logotipo
        const logoContainer = document.getElementById('logoContainer');
        
        logoContainer.addEventListener('click', function() {
            this.style.transform = 'scale(0.9)';
            setTimeout(() => {
                this.style.transform = 'scale(1.05)';
            }, 150);
            setTimeout(() => {
                this.style.transform = '';
            }, 300);
            
            // Troca as mensagens ao clicar
            const messages = [
                'Conectando ao servidor...',
                'Carregando conversas...',
                'Sincronizando mensagens...',
                'Quase pronto...'
            ];
            
            const subMessages = [
                'Verificando mensagens e contatos',
                'Buscando atualizações recentes',
                'Configurando sua conta',
                'Preparando seu WhatsApp'
            ];
            
            const text = document.querySelector('.text');
            const subtext = document.querySelector('.subtext');
            
            const randomIndex = Math.floor(Math.random() * messages.length);
            
            text.style.opacity = '0';
            subtext.style.opacity = '0';
            
            setTimeout(() => {
                text.textContent = messages[randomIndex];
                subtext.textContent = subMessages[randomIndex];
                text.style.opacity = '1';
                subtext.style.opacity = '0.9';
            }, 300);
        });
        
        // Animação dos pontos
        const dots = document.querySelectorAll('.dot');
        let currentActiveDot = 1;
        
        setInterval(() => {
            dots.forEach(dot => dot.classList.remove('active'));
            dots[currentActiveDot].classList.add('active');
            currentActiveDot = (currentActiveDot + 1) % dots.length;
        }, 1500);
        
        // Alterna as dicas
        const tips = [
            'Sabia que você pode usar o WhatsApp no computador e no celular ao mesmo tempo?',
            'Faça backup de suas conversas para não perder suas mensagens importantes.',
            'Use as mensagens temporárias para conversas que não precisam ser guardadas.',
            'Proteja sua conta ativando a verificação em duas etapas nas configurações.'
        ];
        
        const tipElement = document.querySelector('.tip');
        let currentTipIndex = 0;
        
        setInterval(() => {
            tipElement.style.opacity = '0';
            tipElement.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                currentTipIndex = (currentTipIndex + 1) % tips.length;
                tipElement.textContent = tips[currentTipIndex];
                tipElement.style.opacity = '1';
                tipElement.style.transform = 'translateY(0)';
            }, 500);
        }, 5000);
    </script>
</body>
</html>
