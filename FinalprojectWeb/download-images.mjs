// Script to download images from Unsplash for The Wandering Rose website
import axios from 'axios';
import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

const imagesDir = path.join(__dirname, 'public', 'images');

// Ensure images directory exists
if (!fs.existsSync(imagesDir)) {
    fs.mkdirSync(imagesDir, { recursive: true });
}

// Image configurations with Unsplash URLs
const images = [
    {
        filename: 'hero-bg.jpg',
        url: 'https://images.unsplash.com/photo-1564501049412-61c2a3083791?w=1920&h=1080&fit=crop&q=80',
        description: 'Hero background - wooden house with balcony and nature'
    },
    {
        filename: 'location-space.jpg',
        url: 'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=1200&h=800&fit=crop&q=80',
        description: 'Location & Space - lake with pier and mountains'
    },
    {
        filename: 'nature-harmony.jpg',
        url: 'https://images.unsplash.com/photo-1416879595882-3373a0480b5b?w=1200&h=800&fit=crop&q=80',
        description: 'Nature harmony - Japanese garden'
    },
    {
        filename: 'benefits-bg.jpg',
        url: 'https://images.unsplash.com/photo-1559827260-dc66d52bef19?w=1920&h=1080&fit=crop&q=80',
        description: 'Benefits background - wooden deck over water with lily pads'
    },
    {
        filename: 'forest-room.jpg',
        url: 'https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=800&h=600&fit=crop&q=80',
        description: 'Forest Room - modern room with wooden walls'
    },
    {
        filename: 'deluxe-room.jpg',
        url: 'https://images.unsplash.com/photo-1631049307264-da0ec9d70304?w=800&h=600&fit=crop&q=80',
        description: 'Deluxe Room - cozy room with wooden walls and bed'
    },
    {
        filename: 'family-room.jpg',
        url: 'https://images.unsplash.com/photo-1590490360182-c33d57733427?w=800&h=600&fit=crop&q=80',
        description: 'Family Room - two beds side by side'
    },
    {
        filename: 'pink-room.jpg',
        url: 'https://images.unsplash.com/photo-1631049307264-da0ec9d70304?w=800&h=600&fit=crop&q=80',
        description: 'Pink Room - elegant room with pink accents'
    },
    {
        filename: 'rose-house.jpg',
        url: 'https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=800&h=600&fit=crop&q=80',
        description: 'Rose House - white modern house by water'
    },
    {
        filename: 'wooden-house.jpg',
        url: 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=800&h=600&fit=crop&q=80',
        description: 'Wooden House - dark wooden house in nature'
    },
    {
        filename: 'villa.jpg',
        url: 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=800&h=600&fit=crop&q=80',
        description: 'Villa - modern white villa with pool'
    },
    {
        filename: 'birthday-event.jpg',
        url: 'https://images.unsplash.com/photo-1511795409834-ef04bbd61622?w=800&h=600&fit=crop&q=80',
        description: 'Birthday Event - outdoor birthday party setup'
    },
    {
        filename: 'teambuilding.jpg',
        url: 'https://images.unsplash.com/photo-1528605248644-14dd04022da1?w=800&h=600&fit=crop&q=80',
        description: 'Teambuilding - group activity outdoors'
    },
    {
        filename: 'wedding.jpg',
        url: 'https://images.unsplash.com/photo-1519167758481-83f550bb49b3?w=800&h=600&fit=crop&q=80',
        description: 'Wedding - outdoor wedding ceremony'
    },
    {
        filename: 'tour-bavi.jpg',
        url: 'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=800&h=600&fit=crop&q=80',
        description: 'Tour Ba Vi - resort in nature with lake'
    },
    {
        filename: 'tour-aovua.jpg',
        url: 'https://images.unsplash.com/photo-1501785888041-af3ef285b470?w=800&h=600&fit=crop&q=80',
        description: 'Tour Ao Vua - mountains and landscape'
    },
    {
        filename: 'tour-khoangxanh.jpg',
        url: 'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=800&h=600&fit=crop&q=80',
        description: 'Tour Khoang Xanh - waterfall and nature'
    },
    {
        filename: 'tour-experiences.jpg',
        url: 'https://images.unsplash.com/photo-1441974231531-c6227db76b6e?w=800&h=600&fit=crop&q=80',
        description: 'Tour Experiences - forest path'
    },
    {
        filename: 'news-1.jpg',
        url: 'https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=800&h=600&fit=crop&q=80',
        description: 'News 1 - music concert'
    },
    {
        filename: 'news-2.jpg',
        url: 'https://images.unsplash.com/photo-1470229722913-7c0e2dbbafd3?w=800&h=600&fit=crop&q=80',
        description: 'News 2 - concert crowd'
    },
    {
        filename: 'news-3.jpg',
        url: 'https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=800&h=600&fit=crop&q=80',
        description: 'News 3 - event'
    }
];

async function downloadImage(url, filepath) {
    try {
        const response = await axios({
            url: url,
            method: 'GET',
            responseType: 'stream'
        });

        const writer = fs.createWriteStream(filepath);
        response.data.pipe(writer);

        return new Promise((resolve, reject) => {
            writer.on('finish', resolve);
            writer.on('error', reject);
        });
    } catch (error) {
        throw new Error(`Failed to download: ${error.message}`);
    }
}

async function downloadAllImages() {
    console.log('Starting image downloads...\n');
    
    for (const image of images) {
        const filepath = path.join(imagesDir, image.filename);
        
        // Skip if file already exists
        if (fs.existsSync(filepath)) {
            console.log(`✓ ${image.filename} already exists, skipping...`);
            continue;
        }
        
        try {
            console.log(`Downloading ${image.filename}...`);
            await downloadImage(image.url, filepath);
            console.log(`✓ Successfully downloaded ${image.filename}\n`);
        } catch (error) {
            console.error(`✗ Failed to download ${image.filename}: ${error.message}\n`);
        }
    }
    
    console.log('Image download process completed!');
}

downloadAllImages().catch(console.error);


