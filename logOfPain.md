# The log of pain

This is the first real "javascript" project where I really try and learn the fundamentals of the ecosystem.

The goal is to make a simple web application that allows the user to log tasks. And for this to be accually deployed to learn how to deploy a web application.

I decided not to bother with any serious design, documentation or testing, but rather focus on the fundamentals of the stack I chose.

I did do this in previous projects, and it made me lose motivation to continue the project, so I decided to just focus on the code and the functionality of the application.

---

## The stack

| Area                | Choice              |
|---------------------|--------------------|
| **Frontend**        | React              |
| **Backend**         | Node.js with Next.js |
| **Database**        |                    |
| **Deployment**      |                    |
| **Hosting**         |                    |
| **Authentication**  |                    |
| **State Management**| Redux              |
| **Styling**         | React Bootstrap    |
| **Testing**         |                    |
| **Linting**         | ESLint             |
| **Version Control** | Git                |
| **Package Management** | npm             |
| **API**             | RESTful API        |
| **Environment Variables** | dotenv        |

---

## The set-up

I have some very basic experience with React, so I decided to use it for the frontend.

I looked up how to start a react project, and saw you need node and npm.

Installed Node using the installer from the official website.

But I ended up having a issue where in a general terminal I could do `node -v` and it would return the version, but in the project terminal it would not work.

Afther doing some research I found out that it's a path issue in windows.  
I encountered this issue before so I knew you can mannually add the path to the node executable in the environment variables.

But I ended finding a solution that was much easier, I just had to restart my system and it worked.

Afther that I looked into how to create a react project, and found out that you can use the command:

```bash
npx create-react-app my-app
```

to create a new react project.

But I also saw you can use:

```bash
npm init next-app
```

to create a new Next.js project, which is a framework for React that allows you to create server-side rendered applications.

I wanted to have a full stack application. I looked quickly at some backend frameworks, but I wanted to keep it simple and use express.js or Next.js. And I ended up choosing next.js because it looked better suited for my needs.

---

### In the installer I chose the following options:

- **TypeScript:** *Yes*  
  I chose this because I don't see any reason to not have type safety in my project.

- **ESLint:** *Yes*  
  I just wanted to have some basic linting set up.

- **Tailwind CSS:** *No*  
  I'm not a fan of Tailwind CSS, I prefer to use react-bootstrap for styling.

- **Would you like to use `src/` directory?:** *No*  
  I didn't know what this meant, but I saw that it was not recommended to use it, so I just chose no.

- **Would you like to use App Router? (recommended):** *Yes*  
  I chose this because it is the recommended way to use Next.js.

- **Would you like to use TurboPack for 'next dev':** *Yes*  
  I also didn't know what this meant, but I saw that it was the recommended way to use Next.js, so I just chose yes.

- **Would you like to customize the import alias (`@/*` by default)?** *No*  
  I didn't see a reason to customize the import alias, so I just chose no.


Next up I'm going to try and set up a basic front end for the page where you add tasks.