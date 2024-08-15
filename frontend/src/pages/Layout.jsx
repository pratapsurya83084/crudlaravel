import React from 'react';
import { Link } from 'react-router-dom';

const Layout = () => {
  const user = false; // Set this dynamically based on user authentication

  return (
    <div>
      <header className="bg-gray-800 text-white shadow-md">
        <nav className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center h-16">
          <div className="flex items-center space-x-4">
            <Link to="/" className="text-xl font-semibold hover:text-gray-300">
              Home
            </Link>
          </div>

          <div className="flex items-center space-x-6">
            {user ? (
              <div className="flex items-center space-x-4">
                <p className="text-slate-400 text-sm">Welcome back, User</p>
                <Link
                  to="/create"
                  className="bg-blue-600 px-3 py-2 rounded-md text-sm font-medium hover:bg-blue-500"
                >
                  New Post
                </Link>
                <form
                  // onSubmit={handleLogout}
                  className="inline"
                >
                  <button
                    type="submit"
                    className="bg-red-600 px-3 py-2 rounded-md text-sm font-medium hover:bg-red-500"
                  >
                    Logout
                  </button>
                </form>
              </div>
            ) : (
              <div className="flex space-x-4">
                <Link
                  to="/register"
                  className="bg-green-600 px-3 py-2 rounded-md text-sm font-medium hover:bg-green-500"
                >
                  Register
                </Link>
                <Link
                  to="/login"
                  className="bg-blue-600 px-3 py-2 rounded-md text-sm font-medium hover:bg-blue-500"
                >
                  Login
                </Link>
              </div>
            )}
          </div>
        </nav>
      </header>
    </div>
  );
};

export default Layout;
