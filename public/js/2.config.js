tailwind.config = {
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', 'sans-serif'],
            },
            colors: {
                brand: {
                    purple: '#7B68B2',      
                    lightPurple: '#9B8BC4', 
                    darkPurple: '#5A4A8A', 
                    dark: '#111827',        
                    lightBg: '#F8F7FC',     
                }
            },
            animation: {
                'float-slow': 'float 6s ease-in-out infinite',
                'float-fast': 'float 4s ease-in-out 1s infinite',
                'pulse-glow': 'pulseGlow 4s ease-in-out infinite',
                'fade-in-up': 'fadeInUp 0.8s ease-out forwards',
            },
            keyframes: {
                float: {
                    '0%, 100%': { transform: 'translateY(0px) rotate(-2deg)' },
                    '50%':      { transform: 'translateY(-15px) rotate(2deg)' },
                },
                pulseGlow: {
                    '0%, 100%': { opacity: '0.3', transform: 'scale(1)' },
                    '50%':      { opacity: '0.6', transform: 'scale(1.05)' },
                },
                fadeInUp: {
                    '0%':   { opacity: '0', transform: 'translateY(20px)' },
                    '100%': { opacity: '1', transform: 'translateY(0)' },
                }
            }
        }
    }
}